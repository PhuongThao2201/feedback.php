
		$(document).ready(function() {
			$(".star-rating input[type='radio']").click(function(e) {
				$(".star-rating label").css("color", "#ccc");
        $(".star-rating input").attr('checked',false);
        // console.log(e.target);
        console.log(e.target.value);
        $(e.target).attr('checked',true);
        $('.star-rating label').each(function(index,elm){
            console.log(elm)
            let data_star = $(elm).attr('for').split('-');
            if(data_star.length > 1){
              let star = parseInt(data_star[1]);
                if(star <= parseInt(e.target.value)){
                  console.log($(elm).prev());
                  $(elm).css('color','gold');
                }
            }
        });
			});
		});
    const buttons = document.querySelectorAll('.button');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            buttons.forEach(otherButton => {
                otherButton.classList.remove('selected');
            });
            button.classList.add('selected');
        });
    });