<?php
$errors = [];
$success = false;

function old($name) {
    return isset($_POST[$name]) ? htmlspecialchars($_POST[$name]) : '';
}
function checked($name, $value) {
    if (!isset($_POST[$name])) return '';
    if (is_array($_POST[$name])) return in_array($value, $_POST[$name]) ? 'checked' : '';
    return ($_POST[$name] == $value) ? 'checked' : '';
}
function selected($name, $value) {
    return (isset($_POST[$name]) && $_POST[$name] == $value) ? 'selected' : '';
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {


    foreach (["firstname","lastname","address1","city","state","zipcode","country","email","donationamount"] as $field) {
        if (empty($_POST[$field])) {
            $errors[$field] = ucfirst($field)." is required.";
        }
    }


    if (!empty($_POST["email"]) && !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Invalid email format.";
    }

    if (empty($_POST["phone"])) {
        $errors["phone"] = "Enter phone Number.";
    
    if (!preg_match("/^[0-9]{11}$/", $_POST["phone"])) {
        $errors["phone"] = "Phone must be 11 digits.";
    }

    if (!empty($_POST["phone"]) && !is_numeric($_POST["phone"])) {
        $errors["phone"] = "Zip code must be numeric.";
    }
}

 
    if (!empty($_POST["zipcode"]) && !is_numeric($_POST["zipcode"])) {
        $errors["zipcode"] = "Zip code must be numeric.";
    }

    if (empty($_POST["contact"])) {
        $errors["contact"] = "Select at least one contact method.";
    }

    if (empty($errors)) {
        $success = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Donation Form</title>
     <link rel="stylesheet" href="css/from.css">
     <style>.error { 
    color:red;
    font-size:14px;
    margin-left: 5px;
}

 .success { color:green;
            font-weight:bold; }</style>
</head>
<body>
<h2>Donation Form</h2>

<?php if ($success): ?>
  <p class="success">Thank you! Your form was submitted successfully.</p>
<?php endif; ?>

<form method="POST">

  <h3>Donor Information</h3>

  <div class="form-group">
    <label>First Name</label>
    <input type="text" name="firstname" value="<?=old('firstname')?>">
    <div class="error"><?=$errors['firstname']??''?></div>
  </div>

  <div class="form-group">
    <label>Last Name</label>
    <input type="text" name="lastname" value="<?=old('lastname')?>">
    <div class="error"><?=$errors['lastname']??''?></div>
  </div>

  <div class="form-group">
    <label>Company</label>
    <input type="text" name="company" value="<?=old('company')?>">
  </div>

  <div class="form-group">
    <label>Address 1</label>
    <input type="text" name="address1" value="<?=old('address1')?>">
    <div class="error"><?=$errors['address1']??''?></div>
  </div>

  <div class="form-group">
    <label>Address 2</label>
    <input type="text" name="address2" value="<?=old('address2')?>">
  </div>

  <div class="form-group">
    <label>City</label>
    <input type="text" name="city" value="<?=old('city')?>">
    <div class="error"><?=$errors['city']??''?></div>
  </div>

  <div class="form-group">
    <label>State</label>
    <select name="state">
      <option value="">Select State</option>
      <?php foreach (["dhaka","chittagong","rajshahi","khulna","barishal","sylhet","rangpur","mymensingh"] as $st): ?>
        <option value="<?=$st?>" <?=selected('state',$st)?>><?=$st?></option>
      <?php endforeach; ?>
    </select>
    <div class="error"><?=$errors['state']??''?></div>
  </div>

  <div class="form-group">
    <label>Zip code</label>
    <input type="text" name="zipcode" value="<?=old('zipcode')?>">
    <div class="error"><?=$errors['zipcode']??''?></div>
  </div>

  <div class="form-group">
    <label>Country</label>
    <select name="country">
        <option value="">Select Country</option>
        <?php 
        $countries = ["Bangladesh","India","Pakistan","USA","UK","Canada","Australia"];
        foreach($countries as $c): ?>
            <option value="<?=$c?>" <?=selected('country',$c)?>><?=$c?></option>
        <?php endforeach; ?>
    </select>
    <div class="error"><?=$errors['country']??''?></div>
</div>


  <div class="form-group">
    <label>Phone</label>
    <input type="text" name="phone" value="<?=old('phone')?>">
    <div class="error"><?=$errors['phone']??''?></div>
  </div>

  <div class="form-group">
    <label>Fax</label>
    <input type="text" name="fax" value="<?=old('fax')?>">
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" name="email" value="<?=old('email')?>">
    <div class="error"><?=$errors['email']??''?></div>
  </div>

  <div class="form-group">
    <label>Donation Amount</label><br>
    <?php foreach (["none"=>"None","50"=>"$50","75"=>"$75","100"=>"$100","250"=>"$250","other"=>"Others"] as $val=>$label): ?>
      <input type="radio" name="donationamount" value="<?=$val?>" <?=checked('donationamount',$val)?>> <?=$label?><br>
    <?php endforeach; ?>
    <div class="error"><?=$errors['donationamount']??''?></div>
  </div>

  <div class="form-group">
    <label>Other Amount $</label>
    <input type="text" name="otheramount" value="<?=old('otheramount')?>">
  </div>

  <div class="form-group">
    <label><input type="checkbox" name="recurringdonation" value="yes" <?=checked('recurringdonation','yes')?>> Recurring Donation</label>
  </div>

  <div class="form-group">
    <p>Monthly Credit Card $</p>
    <input type="text" name="credit" value="<?=old('credit')?>">
    <p>For</p>
    <input type="text" name="month" value="<?=old('month')?>"> Months
  </div>

  <h2>Honorarium and Memorial Donation Information</h2>

        <div class="form-group">
            <label for="donation"><strong>I would like to make this donation</strong></label>
            <input type="radio" name="donation" > To Honor <br>
            <input type="radio" name="donation" > In Memory of <br>
        </div>

        <div class="form-group">
            <label for="aname"><strong>Name</strong></label>
            <input type="text" id="aname">
        </div>

        <div class="form-group">
            <label for="acknowledge"><strong>Acknowledge Donation to</strong></label>
            <input type="text" id="acknowledge">
        </div>

        <div class="form-group">
            <label for="aaddress"><strong>Address</strong></label>
            <input type="text" id="aaddress">
        </div>

        <div class="form-group">
            <label for="acity"><strong>City</strong></label>
            <input type="text" id="acity">
        </div>

        <div class="form-group">
        <label for="astate"><strong>State</strong></label>
            <select id="astate" name="astate">
                <option value="" disabled selected>Select a State</option>
                <option value="dhaka">Dhaka</option>
                <option value="chittagong">Chittagong</option>
                <option value="rajshahi">Rajshahi</option>
                <option value="khulna">Khulna</option>
                <option value="barishal">Barishal</option>
                <option value="sylhet">Sylhet</option>
                <option value="rangpur">Rangpur</option>
                <option value="mymensingh">Mymensingh</option>
            </select>
        </div>

        <div class="form-group">
            <label for="azip"><strong>Zip</strong></label>
            <input type="text" id="azip">
        </div>
    <h2>Additional Information</h2>

        <div class="form-group">
            <p>Please enter your name, company or organzation as you would like to appear in our publications:</p>
        </div>

        <div class="form-group">
            <label for="name"><strong>Name</strong></label>
            <input type="text" id="name">
        </div>


        <div class="form-group">
        <input type="checkbox" id="anonymous" name="anonymous">
        <p>I would like my gift to remain anonymous</p> 
        </div>


        <div class="form-group">
        <input type="checkbox" id="gift" name="gift"> 
        <p>My employer offers a matching gift program. I will mail the matching gift form. </p> 
        </div>

        <div class="form-group">
        <input type="checkbox" id="save" name="save">
        <p>Please save the cost of acknowledging this gift by not mailing a thank you leter.</p> 
        </div>

        <div class="form-group">
            <label for="comments"><strong>Comments</strong></label>
            <input type="text" id="comments">
        </div>

        <div class="form-group">
           <label><strong>How may we contact you?</strong></label><br>
           <input type="checkbox" id="email" name="contact" value="email">
           <p>E-mail</p><br>
           <input type="checkbox" id="postal" name="contact" value="postal">
           <p>Postal Mail</p><br>
           <input type="checkbox" id="telephone" name="contact" value="telephone">
           <p>Telephone</p><br>
           <input type="checkbox" id="fax" name="contact" value="fax">
           <p>Fax</p><br>
        </div>
        
        <div class="form-group">
           <label>I would like to recive newsletters and information about special day by:</label><br>
           <input type="checkbox" id="email" name="contact" value="email">
           <p>E-mail</p>
           <input type="checkbox" id="postal" name="contact" value="postal">
           <p>Postal Mail</p><br>
        </div>

        <div class="form-group">
        <input type="checkbox" id="vol" name="vol"> <br>
        <p>I would like info about volentare</p> 
        </div>

        <div class="form-group">
        <input type="reset" value="Reset">
        <input type="submit" value="Continue">
        </div>
</form>

</body>
</html>
