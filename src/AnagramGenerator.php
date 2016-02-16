<?php
    class AnagramGenerator
    {
        function breakDownWord($input)
        {
            $anagram_word = str_split($input, 1);
            return $anagram_word;
        }

        function splitUpMatches($test_list)
        {
            $anagram_list = explode(", ", $test_list);

            foreach ($anagram_list as $word)
            {
                $deconstructed_word = str_split($word, 1);
            }

            return $deconstructed_word;
        }

        function testIfMatch($anagram_word, $deconstructed_word)
        {
            $anagram_word_sorted = sort($anagram_word);
            $deconstructed_word_sorted = sort($deconstructed_word);

            $result = array_diff($anagram_word, $deconstructed_word);

            if ($result == null) {
                return "The words are anagrams!";
            } else {
                return "The words are not anagrams.";
            }
        }
    }
 ?>
