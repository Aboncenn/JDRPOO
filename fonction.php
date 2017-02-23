/*
php doubly link list is an amazing data structure ,doubly means you can traverse forward as well as backward, it can act as a deque(double ended queue) if you want it to,
here is how it works

*/
<?php
//instantiating an object of doubly link list

$dlist=new SplDoublyLinkedList();

//a push inserts data at the end of the list
$dlist->push('hiramariam');
$dlist->push('maaz');
$dlist->push('zafar');

/* the list contains
hiramariam
maaz
zafar
*/

//while an unshift inserts an object at top of the list
$dlist->unshift(1);
$dlist->unshift(2);
$dlist->unshift(3);

/* the list now contains
3
2
1
hiramariam
maaz
zafar
*/

//you can delete an item from the bottom of the list by using pop
$dlist->pop();

/* the list now contains
3
2
1
hiramariam
maaz

*/
//you can delete an item from the top of the list by using shift()
$dlist->shift();

/* the list now contains

2
1
hiramariam
maaz

*/

/* if you want to reaplace an item t particular index you can use a method named add , note that if you want to replace an item that does not exist , an exception will be thrown*/

$dlist->add(3 , 2.24);

/*
to go through the list we use a simple for loop, the rewind() method shown below point to the initials of the list depending on the iterator, a valid() method checks whether a list is still valid or not , meaning it ensures the loop does not go on and on after we reach the last data in the list , and the next() method simply points to the next data in the list.

*/
for($dlist->rewind();$dlist->valid();$dlist->next()){

echo $dlist->current()."<br/>";
}
echo "<br/>";
/*

To traverse backward

*/
$dlist->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);
for($dlist->rewind();$dlist->valid();$dlist->next()){

echo $dlist->current()."<br/>";;
}
?>
