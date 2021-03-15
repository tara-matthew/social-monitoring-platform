<?php

namespace App\Http;

use App\Models\Feedback;
use App\Models\Brand;

class DataParser
{
    public function parse($data)
    {
        $feedback = [];
        foreach ($data->data->children as $children) {
            $feedback[] = $children->data->title;
        }

        $this->storeFeedback($feedback);

        //then pass the feedback through a made-up api
    }

    /**
     * @param $feedback
     */
    public function storeFeedback($feedback)
    {
        foreach ($feedback as $key => $data) {
            Feedback::create([
                'social_platform_id' => 4,
                'brand_id' => $key + 1,
                'comment' => $data
            ]);
        }
    }
}
