// Mere knap
// Skal finde ud af hvordan jeg har flere knapper på en side, der åbner hver deres, før jeg bruger det
function myFunction() {
  var x = document.getElementById("mere-tekst");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 

// Jeg har fundet ud af at der er et problem med slick slider og hvordan galleri fungere i den nye wordpress editor
// jeg arbejder på en løsning
jQuery('.home-galleri .blocks-gallery-grid').slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 300,
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: true,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });