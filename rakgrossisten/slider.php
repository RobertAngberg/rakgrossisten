<?php
class Slider
{
    // "..." nedan är för okänt antal parameters
    function showSlider(...$img)
    {
        $argsQty = func_num_args();
        $content = "";

        if ($argsQty > 0) {
            $content = '<div class="slide">
                <img src="bilder/produkter/' . $img[0] . '" />
                </div>';
        }

        if ($argsQty > 1) {
            $content .= '<div class="slide">
                    <img src="bilder/produkter/' . $img[1] . '" />
                </div>
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>';
        }

        if ($argsQty > 2) {
            $content .= '<div class="slide">
                    <img src="bilder/produkter/' . $img[2] . '" />
                </div>
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>';
        }

        echo
        '<div class="slider-container">'
            . $content .
            '</div>';
    }
}
