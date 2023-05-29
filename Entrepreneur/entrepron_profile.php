<head>

<style>

body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

.container {
  max-width: 960px;
  margin: 0 auto;
  display: flex;
  flex-direction:row;
  flex-wrap: wrap;
}

.profile {
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
  background-color: #fff;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px;
}

.profile h1 {
  margin: 0;
  font-size: 24px;
}

.profile img {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  object-fit: cover;
  margin-right: 20px;
}

.profile button {
  background-color: #4CAF50;
  color: white;
  border: none;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.info {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
}

.info-box {
  width: calc(50% - 20px);
  background-color: #fff;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  padding: 20px;
  margin: 10px;
  display: flex;
  flex-direction: column;
}

.info-box h2 {
  margin-top: 0;
  margin-bottom: 10px;
  font-size: 20px;
}

.info-box label {
  font-weight: bold;
  margin-bottom: 5px;
}

.info-box input {
  margin-bottom: 10px;
  padding: 5px;
  border-radius: 5px;
  border: none;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.info-box button {
  background-color: #4CAF50;
  color: white;
  border: none;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-top: auto;
  cursor: pointer;
}

.edit-btn {
  background-color: #2196F3;
  color: white;
  border: none;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  border-radius: 5px;
  cursor: pointer;
  margin-left: 5px;
}

.cancel-btn {
  background-color: #f44336;
  color: white;
  border: none;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  border-radius: 5px;
  cursor: pointer;
  margin-left: 5px;
}

</style>
</head>


<header>
  <div class="logo-container">
    <img src="logo.png" alt="Logo">
  </div>
</header>

<section id="profile">

<div class="b1">
  <div class="container">
    <div class="profile-info">
      <div class="profile-picture">
        <img src="profile-pic.jpg" alt="Profile Picture">
        <button class="edit-button">Edit</button>
      </div>
      <div class="profile-details">
        <div class="detail">
          <h4>First Name:</h4>
          <p>John</p>
          <input type="text" name="first-name" class="edit-field">
        </div>
        <div class="detail">
          <h4>Last Name:</h4>
          <p>Doe</p>
          <input type="text" name="last-name" class="edit-field">
        </div>
        <div class="detail">
          <h4>Username:</h4>
          <p>johndoe</p>
          <input type="text" name="username" class="edit-field">
        </div>

        </div>

        <div class="b2">
        <div class="detail">
          <h4>Password:</h4>
          <p>********</p>
          <input type="password" name="password" class="edit-field">
        </div>
        <div class="detail">
          <h4>Email:</h4>
          <p>johndoe@gmail.com</p>
          <input type="email" name="email" class="edit-field">
        </div>
        <div class="detail">
          <h4>National ID:</h4>
          <p>1234567890</p>
          <input type="text" name="national-id" class="edit-field">
        </div>
        <div class="detail">
          <h4>Address:</h4>
          <p>123 Main Street, Anytown USA</p>
          <textarea name="address" class="edit-field"></textarea>
        </div>
      </div>
    </div>
    <div class="button-container">
      <button class="save-button">Save</button>
      <button class="cancel-button">Cancel</button>
    </div>
  </div>
  </div>
</section>
