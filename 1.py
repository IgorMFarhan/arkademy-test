import json

def biodata(name,age):
    myBiodata =  {
        'name' : name,
        'age' : age,
        'address' : 'Vila Mutiara Lido C3/12, Cigombong, Bogor',
        'hobbies' : ['Badminton','Swimming','Cooking','Reading'],
        'is_married' : False,
        'list_school' : [{
            'elementarySchool' : 'SDN Cigombong 1',
            'year_in' : 2002,
            'year_out' : 2008,
            'major' : None},
            {
            'middleSchool' : 'SMPN 1 Cigombong',
            'year_in' : 2008,
            'year_out' : 2011,
            'major' : None},
            {
            'highSchool' : 'SMAN 1 Cigombong',
            'year_in' : 2011,
            'year_out' : 2014,
            'major' : 'Natural Science'},
            {  
            'university' : 'Universitas Sebelas Maret',
            'year_in' : 2014,
            'year_out' : 2018,
            'major' : 'Electrical Engineering'}],
        
        'skills' : [{
            'skill_name' : 'Web Programming',
            'level' : 'Advanced'},
            {
            'skill_name' : 'Microcontroller programming',
            'level' : 'Expert'}],
        
        'interested_in_coding' : True
    }

    return json.dumps(myBiodata) # convert to JSON


print(biodata('Igor Muhammad Farhan',23)) 