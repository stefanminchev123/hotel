<?php
class room {
	
    function room() {
        $this->singleroom = "Single Room";
        $this->prize= "29.99 eur";
        $this->description="Description: The Single Room is perfect for a business trip. Guests staying in our Single Room will be
inspired by its simple, inspiring elegance and interior, while the spacious working desk accommodates
any preparatory work that needs to be taken care of. ";
    }
}

// create an object
$herbie = new room();

// show object properties
echo $herbie->singleroom;
echo $herbie->prize;
?>