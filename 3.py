def arkademy(x):
    for i in range(1,x+1):    
        if i % 21 == 0:
            print("Arkademy", end=", ")
        
        elif i % 7 == 0:
            print("Demy",end=", ")

        elif i % 3 == 0:
            print("Arka",end=", ")
        
        else:
            print(i, end=", ")
        

arkademy(21)