import logo from './logo.svg';
import './App.css';

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
        <p>
          <button path="./resources/views/dashboard.blade.php" name="Home Page"> test </button>   
        </p>
      </header>
    </div>
  );
}

export default App;
