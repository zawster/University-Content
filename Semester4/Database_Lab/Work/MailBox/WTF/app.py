from flask import Flask, render_template
from flask_wtf import FlaskForm
from wtforms import StringField, PasswordField


app = Flask(__name__)
app.config['SECRET_KEY'] = 'thisissceret!'

class LoginForm(FlaskForm):
	username = StringField('username')
	password = PasswordField('password')


@app.route('/form', methods=['GET', 'POST'])
def form():
	form = LoginForm()

	if form.validate_on_submit():
		return '<h1>The Username is {}. The Password is {}.'.format(form.username.data, form.password.data)
	return render_template('index.html',form=form)	
if __name__ == '__main__':
	app.run(debug=True)