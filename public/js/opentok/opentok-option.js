/* global OT */


const audioSelector = document.querySelector('#audio-source-select');
const videoSelector = document.querySelector('#video-source-select');
const publishBtn = document.querySelector('#publish-btn');
const stopBtn = document.querySelector('#stop-btn');
const cycleVideoBtn = document.querySelector('#cycle-video-btn');
let publisher;

// Get the list of devices and populate the drop down lists
function populateDeviceSources(selector, kind) {
    OT.getDevices((err, devices) => {
        if (err) {
            alert('getDevices error ' + err.message);
            return;
        }
        let index = 0;
        selector.innerHTML = devices.reduce((innerHTML, device) => {
            if (device.kind === kind) {
                index += 1;
                return `${innerHTML}<option value="${device.deviceId}">${device.label || device.kind + index}</option>`;
            }
            return innerHTML;
        }, '');
    });
}

// We request access to Microphones and Cameras so we can get the labels
OT.getUserMedia().then(() => {
    populateDeviceSources(audioSelector, 'audioInput');
    populateDeviceSources(videoSelector, 'videoInput');
});

// Start publishing when you click the publish button
publishBtn.addEventListener('click', () => {
    // Disable the audio and video pickers and hide the publish button
    audioSelector.disabled = true;
    videoSelector.disabled = true;
    publishBtn.style.display = 'none';
    stopBtn.style.display = 'block';


    session.on('streamCreated', function(event) {
        session.subscribe(event.stream, 'subscribers', {
            insertMode: 'append',
            width: '100%',
            height: '100%'
        }, handleError);
    });

    // Start publishing with the selected devices
    publisher = OT.initPublisher('publisher', {
        insertMode: 'append',
        audioSource: audioSelector.value,
        videoSource: videoSelector.value
    }, (err) => {
        if (err) {
            alert('Publish error ' + err.message);
        } else {
            setupDeviceSwitching();
            setupAudioLevelMeter();
        }
    });

    session.connect(token, function(error){
        if(error){
            handleError(error);
        } else {
            session.publish(publisher, handleError)
        }
    })
});

function handleError(error){
    if(error) {
        alert(error.message)
    }
}
// Allow you to switch to different cameras and microphones using
// setAudioSource and cycleVideo
function setupDeviceSwitching() {
    audioSelector.disabled = false;

    // When the audio selector changes we update the audio source
    audioSelector.addEventListener('change', () => {
        audioSelector.disabled = true;
        publisher.setAudioSource(event.target.value).then(() => {
            audioSelector.disabled = false;
        }).catch((err) => {
            alert(`setAudioSource failed: ${err.message}`);
            audioSelector.disabled = false;
        });
    });

    // When the cycleVideo button is clicked we call cycleVideo
    cycleVideoBtn.addEventListener('click', () => {
        cycleVideoBtn.disabled = true;
        publisher.cycleVideo().then(({ deviceId }) => {
            videoSelector.value = deviceId;
            cycleVideoBtn.disabled = false;
        }).catch((err) => {
            alert('cycleVideo error ' + err.message);
            cycleVideoBtn.disabled = false;
        });
    });
    cycleVideoBtn.style.display = 'inline-block';
}

function setupAudioLevelMeter() {
    const audioLevel = document.querySelector('#audio-meter');
    const meter = document.querySelector('#audio-meter meter');
    audioLevel.style.display = 'block';
    let movingAvg = null;
    publisher.on('audioLevelUpdated', (event) => {
        if (movingAvg === null || movingAvg <= event.audioLevel) {
            movingAvg = event.audioLevel;
        } else {
            movingAvg = 0.7 * movingAvg + 0.3 * event.audioLevel;
        }

        // 1.5 scaling to map the -30 - 0 dBm range to [0,1]
        var logLevel = (Math.log(movingAvg) / Math.LN10) / 1.5 + 1;
        logLevel = Math.min(Math.max(logLevel, 0), 1);
        meter.value = logLevel;
    });
}

