import React, { Component } from 'react';
import Ninjas from './Ninjas';
import AddNinja from './AddNinja';

class App extends Component {
  state = {
    ninjas : [
      {name: 'Ryu', age: 24, belt:'black', id: 1},
      {name: 'Ray', age: 24, belt:'red', id: 2},
      {name: 'Reu', age: 25, belt:'brown', id: 3},
      {name: 'Roy', age: 26, belt:'black', id: 4},
      {name: 'Roy', age: 27, belt:'black', id: 4}
    ]
  }
  addNinja = (ninja) => {
    ninja.id = Math.random();
    //spread array takes components individually as elements in the original state
    let ninjas = [...this.state.ninjas, ninja];
    this.setState({
      ninjas: ninjas
    });
  }

  deleteNinja = (id) => {
    //console.log(id);
    //filter through the array above of ninjas by creating variable
    let ninjas = this.state.ninjas.filter(ninja => {
      //return a value that is either true or false. But in this case only the one with the id
      return ninja.id !== id
    });
    //pass it in the new ninja array
    this.setState({
      ninjas: ninjas
    });
  }

  componentDidMount(){
    console.log('Component mounted')
  }
  componentDidUpdate(prevProps, prevState){
    console.log('component updated');
    console.log(prevProps, prevState);    
  }

  render() {
    return (
      <div className="App">
        <h1>My first React App</h1>
        <p>Welcome to it</p>
        <Ninjas deleteNinja={this.deleteNinja} ninjas={this.state.ninjas}/>
        <AddNinja addNinja={this.addNinja} />
      </div>
    );
  } 
}

export default App;
