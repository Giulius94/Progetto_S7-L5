import React from 'react'
import Slider from "react-slick";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
export default function CarouselSlider() {
    function ImageSlider() {
        // Opzioni di configurazione per react-slick
        const settings = {
          dots: true, // Mostra i punti di navigazione sotto lo slider
          infinite: true, // Fa sì che lo slider ricominci da capo quando raggiunge la fine
          speed: 500, // Velocità di transizione tra le immagini
          slidesToShow: 1, // Numero di slide da mostrare alla volta
          slidesToScroll: 1, // Numero di slide da scorrere sul click
          autoplay: true, // Abilita l'autoplay delle slide
          autoplaySpeed: 2000, // Intervallo di tempo prima del cambio slide in autoplay
        };
    
    
  return (
    <Slider {...settings}>
      <div>
        <img src="https://www.teahub.io/photos/full/28-284379_photo-wallpaper-man-workout-gym-working-gym-workout.jpg" alt="Immagine 1" />
      </div>
      <div>
        <img src="https://www.teahub.io/photos/full/28-284379_photo-wallpaper-man-workout-gym-working-gym-workout.jpg" alt="Immagine 2" />
      </div>
      <div>
        <img src="https://www.teahub.io/photos/full/28-284379_photo-wallpaper-man-workout-gym-working-gym-workout.jpg" alt="Immagine 3" />
      </div>
    </Slider>
  )
    }
    
}
