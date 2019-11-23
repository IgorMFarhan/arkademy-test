from collections import Counter

def pairingSocks(pairSocks):
    pairs = []
    for k, v in Counter(pairSocks).items():
        pairs.extend([k] * (v // 2))
    
    print(str(len(pairs)) + " pairs")

pairingSocks([5,13,7,5,9,20,9,5,14]) # 2 pairs = 5,5 and 9,9
pairingSocks([5,13,7,5,9,20,9,5,14,5]) # 3 pairs = 5,5 and 5,5 and 9,9
pairingSocks([5,13,7,5,9,20,9,5,14,5,9,14]) # 4 pairs = 5,5 and 5,5 and 9,9 and 14,14