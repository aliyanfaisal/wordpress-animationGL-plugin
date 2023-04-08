'use-strict';

(function ($) {
    $(window).on('agl-save', function (e) {
        const json = e.detail    
        $.ajax({
    
            type: "POST",
            url: agl_options[2],
            data: {
                json: json,
                security: agl_nonce[0],
                action: "agl_json"
            },
    
            success: function (data, textStatus, jqXHR) {

			},
    
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert("Status: " + textStatus);
                alert("Error: " + errorThrown);
            }
        })
    })

	

	const preview = document.getElementById("agl-preset-preview")
	const name = document.getElementById("agl-name")
	const direction = document.getElementById("agl-direction")
	const cssClass = document.getElementById("agl-css-class")

	$('#agl-name').on('change', function(){
		preview.className = 'agl agl-' + name.value + direction.value
		cssClass.innerText = preview.className
	})
	$('#agl-direction').on('change', function(){
		preview.className = 'agl agl-' + name.value + direction.value
		cssClass.innerText = preview.className
	})

	$('.agl-play').on('click', function(){
		if(preview && preview.plane){
			preview.plane.enable()
			preview.plane.animatedIn = false
			preview.plane.animeIn()
		}
	})

})(jQuery)

window.addEventListener('agl-init', function(){
	const wpAdminBar = document.getElementById('wpadminbar')
	if(wpAdminBar){

		const editorContainer = document.createElement('div')
		editorContainer.id = "aglEditor"
		document.body.appendChild(editorContainer)
		animateGLInstance.options.container = editorContainer

		//position editor after below admin bar
		function positionEditor(){
			editorContainer.style.top = wpAdminBar.offsetHeight + 'px'
		}

		positionEditor()

		window.addEventListener('resize', positionEditor)
		animateGLInstance.options.in.name = ''
		new AGL.Editor(animateGLInstance.options)

	}
	

})




