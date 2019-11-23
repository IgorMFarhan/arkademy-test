import re

def validateUsername(username):
    if re.match(r"^(?=.*[\D])(?=.*[a-z])(?=.*[^A-Z])[\w]{3,5}$", username) :
        return True
    else:
        return False

def validatePassword(password):
    if re.match(r"[\d]", password) :
        return True
    else:
        return False
    
print(validateUsername('aaaa'))
print(validatePassword('123'))