print('bem vindo ao meu programa')
from datetime import datetime
from time import sleep

while True:#rodar para sempre
    hora= datetime.now()
    print(hora.strftime('%H:%M:%S'))
    sleep(1)#esperar um segundo
    
