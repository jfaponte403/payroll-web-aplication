
 <div class="init">
   <form action="" method="post" class= "search">
   <div class="form_group">
        <input type="text" name="id" id="id" class="form_input" placeholder=" ">
        <label class="form_label" for="id">Identification</label>
      </div>
        <button type="submit" name="search" class="form_button">Search</button>
    </form>
    </div>
</br>
</br>
</br>
</br>

<?php
listEmployees($searchResults);
?>