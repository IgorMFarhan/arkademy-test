import re

def validateUsername(username):
    if re.match(r"^(?=.*[\D])(?=.*[a-z])(?=.*[^A-Z])[\w]{3,5}$", username) :
        return True
    else:
        return False

def validatePassword(password):
    if re.match(r"\d\d\d-\d\d\d[A-Z][A-Z][A-Z][A-Z]", password) :
        return True
    else:
        return False
    
print(validateUsername('tania')) # True
print(validateUsername('Eka')) # False
print(validateUsername('mariani')) # False

print(validatePassword('021-333BUDI')) # True
print(validatePassword('021*444DEA')) # True
print(validatePassword('987-654Oliv')) # True

