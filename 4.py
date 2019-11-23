import re

def abbreviation(sentence):
    result = re.findall('[A-Z]', sentence)
    for i in result:
        print(i,end="")
    print("")


abbreviation("Negara Kesatuan Republik Indonesia") # NKRI
abbreviation("JAwa TIMur") # JATIM
abbreviation("joYO MANja") #YOMAN
