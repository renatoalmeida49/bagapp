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

    public static function getAllHandbags(){
        $allBags = [];

        $bags = Handbag::select()->get();

        if($bags) {
            foreach($bags as $bag) {
                $newBag = new Handbag();

                $newBag->id = $bag['id'];
                $newBag->name = $bag['name'];
                $newBag->price = $bag['price'];
                $newBag->photo = $bag['photo'];
                $newBag->rate = $bag['rate'];

                $allBags[] = $newBag;
            }
        }

        return $allBags;
    }

    public function selectById($id) {
        $handbag = new Handbag();

        $select = Handbag::select()->where('id', $id)->one();

        if(count($select) > 0) {
            $handbag->id = $select['id'];
            $handbag->name = $select['name'];
            $handbag->rate = $select['rate'];
            $handbag->photo = $select['photo'];
            $handbag->price = $select['price'];
            $handbag->category = $select['category'];
        }

        return $handbag;
    }
}