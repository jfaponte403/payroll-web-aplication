
  <div class="w-25 mb-4">
    <form action="" method="post" class= "search d-flex">
      <input 
        class="form-control me-2" 
        name="id" 
        id="id" 
        type="search"
        placeholder="Identification" 
        aria-label="Search" 
        placeholder="Ej: 2301094821"
      >
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>

<?php
  listEmployees($searchResults);
?>