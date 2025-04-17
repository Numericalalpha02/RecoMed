from argon2 import __name
from flask import Flask,render_template
import os

app = Flask(__name__)

@app.route("/")
def run_notebook():
    return render_template('chandan.html')

    # This will execute your existing Python script to open the notebook
    os.system('python open_notebook.py')
    return "Notebook is opening in your browser!"

if _name_ == '_main_':
    app.run(debug=True)