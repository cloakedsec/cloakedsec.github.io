$(".homepage-blogcontainer").slick({
    arrows: true,
    dots: false,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,  
    nextArrow: '<button class="nextArrow"><img src="img/arrow-small.png" class="fa-arrow-right"></button>',
    prevArrow: '<button class="prevArrow"><img src="img/arrow-small.png" class="fa-arrow-left"></button>',
    centerPadding: '40px',
    responsive: [
    {
        breakpoint: 1029,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 769,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });

  var modalImg = document.getElementById("img01");
  $("img#myImg").click(function(){
    console.log("here");
    $("#myModal").show();
    modalImg.src=this.src;
  });

  $(".close").click(function(){
    $("#myModal").hide();
  });
