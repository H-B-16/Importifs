<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./contacts.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap"
    />
  </head>
  <body>
    <div class="contacts">
      <div class="vector-parent2">
        <a href="about-after-login.html">
        <img class="frame-child2" alt="" src="./public/rectangle-1.svg" />
        <b class="about2">About</b>
        </a>
      </div>
      <div class="vector-parent3">
        <a href="your-account.php">
        <img class="frame-child3" alt="" src="./public/rectangle-12.svg" />
        <b class="your-account3">Your Account</b>
        </a>
      </div>
      <div class="vector-parent4">
        <img class="group-child3" alt="" src="./public/rectangle-11.svg" />

        <b class="contacts1">Contacts</b>
      </div>
      <div class="importifs-frame">
        <b class="importifs2">IMPORTIFS</b>
      </div>
      <a href="homepage.html">
      <img class="home-icon-11" alt="" src="./public/home-icon-1@2x.png" />
      </a>

      <div class="contacts-child"></div>
      <div class="group-parent">
        <div class="group-container">
          <div class="rectangle-wrapper">
            <div class="rectangle-div"></div>
          </div>
          <a href="add-contact.php">
          <b class="add-contact">Add contact</b>
        </a>
        </div>
        <div class="group-parent1">
          <div class="rectangle-wrapper">
            <div class="rectangle-div"></div>
          </div>
          <b class="add-contact">Delete contact</b>
        </div>
        <div class="group-wrapper">
          <div class="group-frame">
            <div class="group-frame">
              <div class="rectangle-frame">
                <div class="rectangle-div">
                  <select id="contactDropdown">
                    <option value="">Select a contact</option>
                    <?php
                    include "contact-dropdown.php";
                    foreach($contactsArray as $contact) {
                      echo '<option value="' . $contact['name'] . '">' . $contact['name'] . '</option>';
                    }
                    ?>
                    
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="contacts-inner">
        <input type="text" id="nameInput" name="name" placeholder="Name" readonly autocomplete="name">
      </div>
      <div class="contacts-inner1">
          <input type="text" id="numberInput" name="number" placeholder="Number" readonly autocomplete="tel">
      </div>
      <div class="contacts-inner2">
          <input type="text" id="roleInput" name="role" placeholder="Role" readonly autocomplete="role">
      </div>
      <b class="name">Name</b>
      <b class="number">Number</b>
      <b class="role">Role</b>
    </div>
    <script>
    console.log("Script is running");
    const contactDropdown = document.getElementById('contactDropdown');
    const nameInput = document.getElementById('nameInput');
    const numberInput = document.getElementById('numberInput');
    const roleInput = document.getElementById('roleInput');
    
    contactDropdown.addEventListener('change', function() {
      console.log("Dropdown selection changed");
      const selectedContactName = this.value;
      const selectedContact = <?php echo json_encode($contactsArray); ?>;
      const selectedContactDetails = selectedContact.find(contact => contact.name === selectedContactName);
      
      if (selectedContactDetails) {
        nameInput.value = selectedContactDetails.name;
        numberInput.value = selectedContactDetails.number;
        roleInput.value = selectedContactDetails.role;
      } else {
        nameInput.value = '';
        numberInput.value = '';
        roleInput.value = '';
      }
    });
    </script>
  </body>
</html>