import re
import time

file = open("index.blade.php", mode='r', encoding='utf-8')
output = open(f'index_.blade.php', mode='w', encoding='utf-8')

lines = file.readlines()
pattern = r'("\.[\dA-Za-z./-_\u0E00-\u0E7F-()]+")'
replacement = r"'{{ asset(\1) }}'"
for i in range(0, lines.__len__()):
    check = re.search(string=lines[i], pattern=pattern)
    if(check): 
        a = re.sub(string=lines[i], pattern=pattern, repl=replacement)
        a = a.replace('./', '')
        lines[i] = a
    output.write(lines[i])

file.close()
output.close()