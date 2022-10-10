<?php

class ArrangListAlgorithm
{
    public function findItem(array $itemList, string $name)
    {
        $exist = false;

        foreach ($itemList as $key => $item) {
            if ($name === $item) {
                $exist = $key;
            }
        }

        return $exist;
    }

    public function arrangeItems(array $arrangedItems, array &$itemList)
    {
        foreach ($arrangedItems as $arranged) {
            $arrangeNow = $this->findItem($itemList, $arranged);

            if ($arrangeNow !== false) {
                array_splice($itemList, $arrangeNow, 1);
            }
        }
    }
}

$cars = ['Mercides', 'Honda', 'Daf', 'Toyota', 'Renault', 'Nissan']; // This array contains the unordered cars

$addedCars = ['Mercides', 'Honda', 'Daf']; //this array contains the cars that has been orderd;

$first = new ArrangListAlgorithm();
$first->arrangeItems($addedCars, $cars);
$unListedCars = implode(',', $cars);

echo $unListedCars."\n"." has not been listed\n";

echo "Here is the list of arranged cars\n".implode(' , ', $addedCars);
