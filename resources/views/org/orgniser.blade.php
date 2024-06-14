<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Setup</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Account Setup</h1>
        <form>
            <div class="form-group">
                <h2>Organisation Details</h2>
                <label for="organisation-name">Organisation/Individual Name</label>
                <input type="text" class="form-control" id="organisation-name" placeholder="Enter organisation name" required>
                <label for="organisation-address">Organisation/Individual Address</label>
                <input type="text" class="form-control" id="organisation-address" placeholder="Enter organisation address" required>
                <label for="organisation-pan-card-number">Organisation/Individual PAN card number</label>
                <input type="text" class="form-control" id="organisation-pan-card-number" placeholder="Enter PAN card number" required>
                {{-- <div class="form-check">
                    <input class="form-check-input" type="radio" name="gstin-number" id="gstin-number-yes" value="yes">
                    <label class="form-check-label" for="gstin-number-yes">Yes</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gstin-number" id="gstin-number-no" value="no">
                    <label class="form-check-label" for="gstin-number-no">No</label>
                </div>
                <label for="it-return">Have you filled last 2 years ITR return?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="it-return" id="it-return-yes" value="yes">
                    <label class="form-check-label" for="it-return-yes">Yes</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="it-return" id="it-return-no" value="no">
                    <label class="form-check-label" for="it-return-no">No</label>
                </div> --}}
                <label for="state">State</label>
                <select class="form-control" id="state">
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="West Bengal">West Bengal</option>
                </select>
            </div>
            <div class="form-group">
                <h2>Contact Person Details</h2>
                <label for="full-name">Full Name</label>
                <input type="text" class="form-control" id="full-name" placeholder="Enter full name" required>
                <label for="email-address">Email address</label>
                <input type="email" class="form-control" id="email-address" placeholder="Enter email address" required>
                <label for="mobile-number">Mobile Number</label>
                <input type="tel" class="form-control" id="mobile-number" placeholder="Enter mobile number" value="" required>
            </div>
            <div class="form-group">
                <h2>Bank details</h2>
                <label for="beneficiary-name">Beneficiary Name</label>
                <input type="text" class="form-control" id="beneficiary-name" placeholder="Enter beneficiary name" required>
                <label for="account-type">Account Type</label>
                <select class="form-control" id="account-type">
                    <option value="Savings account">Savings account</option>
                    <option value="Current account">Current account</option>
                </select>
                <label for="bank-name">Bank Name</label>
                <select class="form-control" id="bank-name">
                    <option value="State Bank of India">State Bank of India</option>
                    <option value="HDFC Bank">HDFC Bank</option>
                    <option value="ICICI Bank">ICICI Bank</option>
                    <option value="Axis Bank">Axis Bank</option>
                    <option value="Punjab National Bank">Punjab National Bank</option>
                    <option value="Canara Bank">Canara Bank</option>
                    <option value="Bank of Baroda">Bank of Baroda</option>
                    <option value="Bank of India">Bank of India</option>
                    <option value="Union Bank of India">Union Bank of India</option>
                    <option value="IDBI Bank">IDBI Bank</option>
                    <option value="Others">Others</option>
                </select>
                <label for="account-number">Account Number</label>
                <input type="text" class="form-control" id="account-number" placeholder="Enter account number" required>
                <label for="bank-ifsc">Bank IFSC</label>
                <input type="text" class="form-control" id="bank-ifsc" placeholder="Enter bank IFSC" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>