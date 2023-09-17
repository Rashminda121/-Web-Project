
        //Javacript for responsive navigation menu

        const menuBtn = document.querySelector(".menu-btn");
        const navigation = document.querySelector(".navigation");
    
        menuBtn.addEventListener("click", () => {
          menuBtn.classList.toggle("active");
          navigation.classList.toggle("active");
        });


        const header = document.querySelector('.header');

        window.onscroll = function(){
          var top = window.scrollY;
          console.log(top);
          if (top>=40){
            header.classList.add('active');
          }else{
            header.classList.remove('active');
          }

        }