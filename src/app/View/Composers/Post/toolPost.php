<?php

namespace Wp\Post;

use function Roots\view;

class Tool
{
    /**
     * objectThumbnail
     * object fit 스타일을 같는 섬네일을 전달하는데 이미지가 없을때 기본 값인 no image를 리턴한다.
     *
     * @param WP_Post $post
     *
     * @return image
     */
    public static function objectThumbnail($post)
    {
        if ($thumbnail_url = get_the_post_thumbnail_url($post)) {
            return <<<EOD
        <img src="$thumbnail_url">
EOD;
        } else {
            $img = get_theme_file_uri('resources/images/no-image-icon-23487.png');
            return <<<EOD
      <img src="$img">
EOD;
        }
    }

    public function return_image_path($thumbID)
    {
        $image = wp_get_attachment_image_src($thumbID, 'full');
        $imagepath = str_replace(get_site_url(), $_SERVER['DOCUMENT_ROOT'], $image[0]);

        if ($imagepath) return $imagepath;

        return false;
    }

    public function get_avg_luminance($filename, $num_samples = 10)
    {
        if (strpos($filename, 'png')) {
            $img = imagecreatefrompng($filename);
        } elseif (strpos($filename, 'jpg')) {
            $img = imagecreatefromjpeg($filename);
        } else return;

        $width = imagesx($img);
        $height = imagesy($img);

        $x_step = intval($width / $num_samples);
        $y_step = intval($height / $num_samples);

        $total_lum = 0;

        $sample_no = 1;

        for ($x = 0; $x < $width; $x += $x_step) {
            for ($y = 0; $y < $height; $y += $y_step) {

                $rgb = imagecolorat($img, $x, $y);
                $r = ($rgb >> 16) & 0xFF;
                $g = ($rgb >> 8) & 0xFF;
                $b = $rgb & 0xFF;

                // choose a simple luminance formula from here
                // http://stackoverflow.com/questions/596216/formula-to-determine-brightness-of-rgb-color
                $lum = ($r + $r + $b + $g + $g + $g) / 6;

                $total_lum += $lum;

                // debugging code
                //           echo "$sample_no - XY: $x,$y = $r, $g, $b = $lum<br />";
                $sample_no++;
            }
        }

        // work out the average
        $avg_lum = $total_lum / $sample_no;

        return $avg_lum > 170; // true -> black, false -> white
    }
}
