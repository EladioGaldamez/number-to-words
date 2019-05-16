<?php

namespace NumberToWords\NumberTransformer;

class EnglishTest extends NumberTransformerTest
{
    protected function setUp(): void
    {
        $this->numberTransformer = new English();
    }

    public function providerItConvertsNumbersToWords(): array
    {
        return [
            [11, 'eleven'],
            [12, 'twelve'],
            [16, 'sixteen'],
            [19, 'nineteen'],
            [20, 'twenty'],
            [21, 'twenty-one'],
            [26, 'twenty-six'],
            [30, 'thirty'],
            [31, 'thirty-one'],
            [40, 'forty'],
            [43, 'forty-three'],
            [50, 'fifty'],
            [55, 'fifty-five'],
            [60, 'sixty'],
            [67, 'sixty-seven'],
            [70, 'seventy'],
            [79, 'seventy-nine'],
            [100, 'one hundred'],
            [101, 'one hundred one'],
            [199, 'one hundred ninety-nine'],
            [203, 'two hundred three'],
            [287, 'two hundred eighty-seven'],
            [300, 'three hundred'],
            [356, 'three hundred fifty-six'],
            [410, 'four hundred ten'],
            [434, 'four hundred thirty-four'],
            [578, 'five hundred seventy-eight'],
            [689, 'six hundred eighty-nine'],
            [729, 'seven hundred twenty-nine'],
            [894, 'eight hundred ninety-four'],
            [999, 'nine hundred ninety-nine'],
            [1000, 'one thousand'],
            [1001, 'one thousand one'],
            [1097, 'one thousand ninety-seven'],
            [1104, 'one thousand one hundred four'],
            [1243, 'one thousand two hundred forty-three'],
            [2385, 'two thousand three hundred eighty-five'],
            [3766, 'three thousand seven hundred sixty-six'],
            [4196, 'four thousand one hundred ninety-six'],
            [5846, 'five thousand eight hundred forty-six'],
            [6459, 'six thousand four hundred fifty-nine'],
            [7232, 'seven thousand two hundred thirty-two'],
            [8569, 'eight thousand five hundred sixty-nine'],
            [9539, 'nine thousand five hundred thirty-nine'],
            [-9539, 'minus nine thousand five hundred thirty-nine'],
            [-3, 'minus three'],
            [0, 'zero'],
            [3, 'three'],
            [8, 'eight'],
            [10, 'ten'],
            [20, 'twenty'],
            [50, 'fifty'],
            [90, 'ninety'],
            [12, 'twelve'],
            [25, 'twenty-five'],
            [58, 'fifty-eight'],
            [99, 'ninety-nine'],
            [100, 'one hundred'],
            [102, 'one hundred two'],
            [113, 'one hundred thirteen'],
            [229, 'two hundred twenty-nine'],
            [500, 'five hundred'],
            [666, 'six hundred sixty-six'],
            [660, 'six hundred sixty'],
            [1000, 'one thousand'],
            [1001, 'one thousand one'],
            [1010, 'one thousand ten'],
            [1015, 'one thousand fifteen'],
            [1100, 'one thousand one hundred'],
            [1111, 'one thousand one hundred eleven'],
            [4538, 'four thousand five hundred thirty-eight'],
            [5020, 'five thousand twenty'],
            [11001, 'eleven thousand one'],
            [21512, 'twenty-one thousand five hundred twelve'],
            [90000, 'ninety thousand'],
            [92100, 'ninety-two thousand one hundred'],
            [212112, 'two hundred twelve thousand one hundred twelve'],
            [720018, 'seven hundred twenty thousand eighteen'],
            [1001001, 'one million one thousand one'],
            [3248518, 'three million two hundred forty-eight thousand five hundred eighteen'],
            [1800000006, 'one billion eight hundred million six'],
            [0, 'zero'],
            [1, 'one'],
            [9, 'nine'],
            [10, 'ten'],
            [11, 'eleven'],
            [19, 'nineteen'],
            [20, 'twenty'],
            [21, 'twenty-one'],
            [80, 'eighty'],
            [90, 'ninety'],
            [99, 'ninety-nine'],
            [100, 'one hundred'],
            [101, 'one hundred one'],
            [111, 'one hundred eleven'],
            [120, 'one hundred twenty'],
            [121, 'one hundred twenty-one'],
            [900, 'nine hundred'],
            [909, 'nine hundred nine'],
            [919, 'nine hundred nineteen'],
            [990, 'nine hundred ninety'],
            [999, 'nine hundred ninety-nine'],
            [1000, 'one thousand'],
            [2000, 'two thousand'],
            [4000, 'four thousand'],
            [5000, 'five thousand'],
            [11000, 'eleven thousand'],
            [21000, 'twenty-one thousand'],
            [999000, 'nine hundred ninety-nine thousand'],
            [999999, 'nine hundred ninety-nine thousand nine hundred ninety-nine'],
            [1000000, 'one million'],
            [2000000, 'two million'],
            [4000000, 'four million'],
            [5000000, 'five million'],
            [999000000, 'nine hundred ninety-nine million'],
            [999000999, 'nine hundred ninety-nine million nine hundred ninety-nine'],
            [999999000, 'nine hundred ninety-nine million nine hundred ninety-nine thousand'],
            [999999999, 'nine hundred ninety-nine million nine hundred ninety-nine thousand nine hundred ninety-nine'],
            [1174315110, 'one billion one hundred seventy-four million three hundred fifteen thousand one hundred ten'],
            [1174315119, 'one billion one hundred seventy-four million three hundred fifteen thousand one hundred nineteen'],
            [15174315119, 'fifteen billion one hundred seventy-four million three hundred fifteen thousand one hundred nineteen'],
            [35174315119, 'thirty-five billion one hundred seventy-four million three hundred fifteen thousand one hundred nineteen'],
            [935174315119, 'nine hundred thirty-five billion one hundred seventy-four million three hundred fifteen thousand one hundred nineteen'],
            [2935174315119, 'two trillion nine hundred thirty-five billion one hundred seventy-four million three hundred fifteen thousand one hundred nineteen'],
        ];
    }
}
