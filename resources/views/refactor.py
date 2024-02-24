import re

file = open("index.blade.php", mode='r', encoding='utf-8')

lines = file.readlines()
pattern = r'("\.[\dA-Za-z./-_\u0E00-\u0E7F-]+")'
replacement = r'{{ asset(\1) }}'
for i in lines:
    # print(i, end='')
    check = re.search(string=i, pattern=pattern)
    if(check): 
        print(re.sub(string=i, pattern=pattern, repl=replacement), end='')