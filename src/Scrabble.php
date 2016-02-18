<?php
    class Scrabble
    {

        function scoreGenerator($input)
        {
            $game_array = array("a"=>1, "e"=>1, "i"=>1, "o"=>1, "u"=>1, "l"=>1, "n"=>1, "r"=>1, "s"=>1, "t"=>1, "d"=>2, "g"=>2, "b"=>3, "c"=>3, "m"=>3, "p"=>3, "f"=>4, "h"=>4, "v"=>4, "w"=>4, "y"=>4, "k"=>5, "j"=>8, "x"=>8, "q"=>10, "z"=>10);

            $total_score = 0;
            $input = strtolower($input);
            $letter_array = str_split($input,1);

            foreach($letter_array as $letter)
            {
                foreach ($game_array as $key => $value)
                {

                    if($letter == $key)
                    {
                        $total_score += $value;
                    }
                }
            }
            return $total_score;


        }
    }
?>
