$(document).ready(function(){
	// PNG Fix
	$(document).pngFix();
	
	// Flash text replacement
	$('.mistral').flash(
		{ 
			src: 'interface/flash/mistral.swf',  
			flashvars: { 
				css: [
					'* { color: #ffffff; }',
					'a { color: #0055CC; text-decoration: none; }',
					'a:hover { text-decoration: underline; }'
				].join(' ')
			},
			wmode: "transparent"
		},
		{ version: 7 },
		function(htmlOptions) {
			htmlOptions.flashvars.txt = this.innerHTML;
			this.innerHTML = '<span>'+this.innerHTML+'</span>';
			var $alt = $(this.firstChild);
			htmlOptions.height = $alt.height();
			htmlOptions.width = $alt.width();
			$alt.addClass('alt');
			$(this)
				.addClass('flash-replaced')
				.prepend($.fn.flash.transform(htmlOptions));						
		}
	);
	$('.mistral-black').flash(
		{ 
			src: 'interface/flash/mistral.swf',  
			flashvars: { 
				css: [
					'* { color: #000000; }',
					'a { color: #0055CC; text-decoration: none; }',
					'a:hover { text-decoration: underline; }'
				].join(' ')
			},
			wmode: "transparent"
		},
		{ version: 7 },
		function(htmlOptions) {
			htmlOptions.flashvars.txt = this.innerHTML;
			this.innerHTML = '<span>'+this.innerHTML+'</span>';
			var $alt = $(this.firstChild);
			htmlOptions.height = $alt.height();
			htmlOptions.width = $alt.width();
			$alt.addClass('alt');
			$(this)
				.addClass('flash-replaced')
				.prepend($.fn.flash.transform(htmlOptions));						
		}
	);
	
	// News ticker
	$("#newsTicker li:first").fadeIn("slow");
	$("#newsTicker").newsTicker();
	
	// Print Links
	$(".printpage").click(
		function() {
			printPage();
			return false;
		}
	);	
	
	// Form validation
	if($("#reservationForm").length>0) {
		formRef = $("#reservationForm");
		formRef.prepend('<div id="validationErrorContainer"><ol style="display: none;"></ol></div>');
		containerRef = $("#validationErrorContainer");
		formRef.validate({
			errorLabelContainer: containerRef,
			errorLabelContainer: $("ol", containerRef),
			wrapper: 'li'
		});
	}
});

function printPage() {
	if (window.print) {
		window.print() ;
	} else {
		var WebBrowser = '<OBJECT ID="WebBrowser1" WIDTH=0 HEIGHT=0 CLASSID="CLSID:8856F961-340A-11D0-A96B-00C04FD705A2"></OBJECT>';
		document.body.insertAdjacentHTML('beforeEnd', WebBrowser);
		WebBrowser1.ExecWB(6, 2);//Use a 1 vs. a 2 for a prompting dialog box WebBrowser1.outerHTML = "";
	}
}