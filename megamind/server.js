const express = require('express');
const mongoose = require('mongoose');
const bcrypt = require('bcryptjs');
const jwt = require('jsonwebtoken');

const app = Router();

mongoose.connect('mongodb://localhost/mydatabase', { useNewUrlParser: true, useUnifiedTopology: true });

const userSchema = new mongoose.Schema({
  username: String,
  email: String,
  password: String
});

const User = mongoose.model('User', userSchema);

app.use(express.json()); // parse JSON bodies

// API endpoint for signup
app.post('/api/signup', async (req, res) => {
  const { username, email, password } = req.body;
  const hashedPassword = await bcrypt.hash(password, 10);
  const user = new User({ username, email, password: hashedPassword });
  await user.save();
  res.json({ message: 'Signup successful' });
});

// API endpoint for login
app.post('/api/login', async (req, res) => {
  const { email, password } = req.body;
  const user = await User.findOne({ email });
  if (!user) {
    return res.json({ message: 'Invalid email or password' });
  }
  const isValidPassword = await bcrypt.compare(password, user.password);
  if (!isValidPassword) {
    return res.json({ message: 'Invalid email or password' });
  }
  const token = jwt.sign({ userId: user._id }, 'secretkey', { expiresIn: '1h' });
  res.json({ token });
});

app.listen(3000, () => {
  console.log('Server started on port 3000');
});
