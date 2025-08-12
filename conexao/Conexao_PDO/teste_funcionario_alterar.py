from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import os

url = 'http://localhost:8080/Gustavo_Wendt_PHP/Novo_PHP/conexao/Conexao_PDO/atualizarCliente.php'

driver = webdriver.Chrome()

try:
    driver.get(url)
    wait = WebDriverWait(driver, 10)

    # Espera o campo 'nome' estar presente e visível antes de preencher
    campo_id = wait.until(EC.visibility_of_element_located((By.ID, "id")))
    campo_id.send_keys("2")

    url_antes = driver.current_url

    botao_cadastrar = wait.until(EC.element_to_be_clickable((By.TAG_NAME, "button")))
    botao_cadastrar.click()

    

    # Espera até que a URL mude para confirmar o submit
    try:
        wait.until(EC.url_changes(url_antes))
        print("Busca realizada com sucesso!")
    except:
        print("Falha na busca ou tempo de resposta excedido.")
    


finally:
    driver.quit()