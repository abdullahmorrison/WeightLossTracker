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
    border: 1px solid #888;
    border-radius: 10px;
    width: 40%;
  }
  .modal-content div{
    padding: 10px;
  }
  .modal-header{
    background-color: #f84949;
    border-radius: 2px;
    height: 20px;
  }
  .modal-footer{
    text-align: center;
  }
  .modal-footer button{
    margin: 0 20px;
  }

  /* The Close Button */
  .close {
    color: black;
    float: right;
    font-size: 28px;
    font-weight: bold;
    padding: 2px;
  }

  .close:hover,
  .close:focus {
    text-decoration: none;
    cursor: pointer;
  }
</style>

<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close" onclick=closeModal()>&times;</span>
    </div>
    <div class="modal-body">
      <p>Have you just eaten this food?</p>
    </div>
    <div class="modal-footer">
      <button>Yes</button>
      <button onclick=closeModal()>No</button>
    </div>
  </div>
</div>

<script>
  // Get the modal
  var modal = document.getElementById("myModal");

  // When the user clicks the a food, open the modal 
  function displayModal() {
    modal.style.display = "block";
  }
  // When the user clicks on <span> (x), close the modal
  function closeModal() {
    modal.style.display = "none";
  }
</script>

