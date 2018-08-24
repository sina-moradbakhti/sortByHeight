<?php
function sortByHeight($a)
{
    $newA = $a;
    $arr = [];
    for($i=0;$i<count($newA);$i++)
    {
        if($newA[$i] != -1)
        {
            $arr[] = $newA[$i];
        }
    }

    /* sorting */
    sort($arr);
    $return = [];

    $j=0;
    for($i=0;$i<count($a);$i++)
    {
        if($a[$i] == -1)
        {
            $return[] = -1;
        }
        else
        {
            $firstItem = $arr[$j];
            $return[] = $firstItem;
            $j++;
        }
    }

    return $return;
}
?>