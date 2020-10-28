<?php
namespace src\handlers;

use src\models\Handbag;

class HandbagHandler {
    public static function searchHandbag($q) {
        $bags = [];

        $data = Handbag::select()
            ->where('name', 'like', '%'.$q.'%')
        ->get();

        if($data) {
            foreach($data as $bag) {
                $newBag = new Handbag();

                $newBag->id = $bag['id'];
                $newBag->name = $bag['name'];
                $newBag->price = $bag['price'];
                $newBag->photo = $bag['photo'];
                $newBag->rate = $bag['rate'];

                $bags[] = $newBag;
            }
        }

        return $bags;
    }

    public static function insertHandbag($name, $price, $rate, $category, $photoName) {
        Handbag::insert([
            'name' => $name,
            'price' => $price,
            'category' => $category,
            'photo' => $photoName,
            'rate' => $rate
        ])->execute();
    }
}