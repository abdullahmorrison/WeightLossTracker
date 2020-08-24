<!-- Taken From https://www.w3schools.com/howto/howto_css_modals.asp -->
<style>
  /* The Modal (background) */
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 15%; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  }

  /* Modal Content */
  .modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 40%;
  }

  /* The Close Button */
  .close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
  }
</style>

<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close" onclick=closeModal()>&times;</span>
    <p>Have you just eaten this food?</p>
    <button>Yes</button>
    <button onclick=closeModal()>No</button>
  </div>
</div>

<script>
  // When the user clicks the a food, open the modal 
  function displayModal() {
    modal.style.display = "block";
  }
  // When the user clicks on <span> (x), close the modal
  function closeModal() {
    modal.style.display = "none";
  }
</script>

