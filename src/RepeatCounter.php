<?php
    class RepeatCounter
    {
        function countRepeats($input_one, $input_two)
        {
            $input_one = strtolower($input_one);
            $input_two = strtolower($input_two);
            $input_two = preg_replace('/[^a-z0-9]+/i', ' ', $input_two);
            $sentence_array = explode(" ", $input_two);
            $counter = 0;

            foreach ($sentence_array as $word)
                if ($word == $input_one) {
                    $counter = $counter + 1;
                }
                if ($counter === 0) {
                    return "no word matches found";
                }
            return $counter;
        }
    }
?>
