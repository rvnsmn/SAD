
   function toggleForm() {
      var tableContainer = document.getElementById('tableContainer');
      if (tableContainer) {
         tableContainer.style.display = (tableContainer.style.display === 'none') ? 'block' : 'none';
      }

      var modalContainer = document.querySelector('.modal-container');
      if (!modalContainer) {
         createModal();
      } else {
         modalContainer.remove();
      }
   }

   function createModal() {
      var modalContainer = document.createElement('div');
      modalContainer.className = 'modal-container';

      modalContainer.innerHTML = `
         <div class="modal-content">
            <button class="upper-right-button" onclick="toggleForm()">Close</button>
            <style class="modal-style">
               /* Your CSS styles here */
            </style>
            <div class="container">
               <div class="title">Household Information Form</div>
               <form action="#">
                  <!-- Your form content goes here -->
               </form>
            </div>
         </div>
      `;

      document.body.appendChild(modalContainer);
   }

    // Function to handle adding a member
    function addMember() {
      // Your logic for adding a member goes heres
      alert('Adding a member...');
  }

  // Function to handle submitting a record
  function submitRecord() {
      // Your logic for submitting a record goes here
      alert('Submitting record...');
  }

