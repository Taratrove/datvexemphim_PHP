<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    form {
      width: 550px;
    }

    legend  {
      text-transform: capitalize;
      font-weight: bold;
      font-size: 20px;
    }

  </style>
</head>

<body>

<form action="Bai8_config.php" method="post">
  <fieldset>
    <legend>Enter Your Information</legend>
    <table>
      <tbody>
        <tr>
          <td><label for="fullname">Fullname:</label></td>
          <td><input type="text" id="fullname" name="fullname" required></td>
        </tr>
          <tr>
            <td><label for="address">Address:</label></td>
            <td><input type="text" id="address" name="address" required></td>
          </tr>
         <tr>
           <td><label for="phone">Phone:</label></td>
           <td><input type="tel" id="phone" name="phone" pattern="[0,+84]{1}[0-9]{9,10}" required ></td>
         </tr>
          <tr>
            <td>
              <label>Gender:</label>
            </td>
            <td>
              <label for="male">Nam</label>
              <input type="radio" value="male" id="male" name="rdi-gender" checked >
              <label for="female">Nữ</label>
              <input type="radio" value="female" id="female" name="rdi-gender"><br>
            </td>
          </tr>

          <tr>
            <td>
              <label for="country">Country:</label>
            </td>
            <td>

              <select name="country" id="country">
                <option value="Việt Nam">Việt Nam</option>
                <option value="USA">USA</option>
                <option value="Canada">Canada</option>
              </select><br>
            </td>
          </tr>
          <tr>
            <td><label>Study:</label></td>
            <td>
              <label class="chx" for="pm">PHP & MySQL</label>
              <input type="checkbox" id="pm" name="chx-study[]" value="PHP & MySQL">
              <label class="chx" for="asp">ASP.NET</label>
              <input type="checkbox" id="asp" name="chx-study[]" value="ASP.NET">
              <label class="chx" for="ccna">CCNA</label>
              <input type="checkbox" id="ccna" name="chx-study[]" value="CCNA">
              <label class="chx" for="sec">Security+</label>
              <input type="checkbox" id="sec" name="chx-study[]" value="Security+">
            </td>
          </tr>
          <tr>
            <td><label for="note">Note:</label></td>
            <td>
              <textarea id="note" name="note" cols="50" rows="5"></textarea><br>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <input type="submit" value="Gửi">
              <input type="reset" value="Hủy">
            </td>
          </tr>
      </tbody>

    </table>
  </fieldset>
</form>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    let phone = document.getElementById("phone");
    phone.oninvalid = function(e) {
      e.target.setCustomValidity("");
      if (!e.target.validity.valid) {
        e.target.setCustomValidity("Không đúng định dạng số điện thoại!");
      }
    };
  })
</script>

</body>
</html>
