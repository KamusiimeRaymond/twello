<!--4 For Components--------------------------------------------------------
<div id="app"></div>

<script type="text/babel">        
    class App extends React.Component {
         render() {
            return (
                <div className="app-content">
                    <h1>Hey, Ray</h1>
                    <p>{ Math.random() * 10}</p>
                </div>
            )
        }
    }
   
    ReactDOM.render(<App />,document.getElementById('app'));
</script>



--5. States------------------------------------------------------------------
For dyamic data

<div id="app"></div>

    <script type="text/babel">
        class App extends React.Component {
            state = {
                name: 'Ray',
                age: 24
            }
            render() {
                return (
                    <div className="app-content">
                        <h1>Hey, Ray</h1>
                        <p>My name is: {this.state.name } and I am {this.state.age}</p>
                    </div>
                )
            }
        }
   
     ReactDOM.render(<App />,document.getElementById('app'));
    </script>


---6. Uisng React development tols on chrome--------
This will allow you be able to change states easily and dynamically
-----------------------------


---7. Handling events-------------------------------------------------------
<div id="app"></div>

    <script type="text/babel">
        class App extends React.Component {
            state = {
                name: 'Ray',
                age: 24
            }
            handleClick(e){
                //when user clicks on button
                console.log(e.target);
            }
            handleMouseOver(e){
                //for mouse hover
                console.log(e.target, e.pageX);
            }
            handleCopy(e){
                //if user tries to copy text
                console.log('Try original!');
            }
            render() {
                return (
                    <div className="app-content">
                        <h1>Hey, Ray</h1>
                        <p>My name is: {this.state.name } and I am {this.state.age}</p>
                        <button onClick={this.handleClick}>Click Me</button>
                        <button onMouseOver={this.handleMouseOver}>Hover Me</button>
                        <p onCopy={this.handleCopy}>What we think, we become!</p>
                    </div>
                )
            }
        }
   
     ReactDOM.render(<App />,document.getElementById('app'));
    </script>


---8. Changing states ---------------------------------------------------------
when you use the this.state statement in the function, it will not work
The best way of going round this is to have "=" sign right before the event.
This will help to render the state you want
e.g     instead of console.log(e)
        use console.log = (e) => {...}
i.e use the = and => beside the function to render the state.
Only when you want to use the "this" in state.

class App extends React.Component {
            state = {
                name: 'Ray',
                age: 24
            }
            handleClick = (e) => {
                //console.log(e.target);
                console.log(this.state);
            }
            handleMouseOver = (e) => {
                console.log(e.target, e.pageX);
            }
            handleCopy = (e) => {
                console.log('Try original!');
            }
            render() {
                return (
                    <div className="app-content">
                        <h1>Hey, Ray</h1>
                        <p>My name is: {this.state.name } and I am {this.state.age}</p>
                        <button onClick={this.handleClick}>Click Me</button>
                        <button onMouseOver={this.handleMouseOver}>Hover Me</button>
                        <p onCopy={this.handleCopy}>What we think, we become!</p>
                    </div>
                )
            }
        }
When you click the button, the rendererd state will be shown in your console.

So if you want to change the state within the function, use:

handleClick = (e) => {
    //console.log(e.target);
    //console.log(this.state);
    this.setState({
        name: 'Yoshi',
        age: 25
    });
}



---9. Introduction to forms  ---------------------------------------------------------
In the react class, add a form with a fiunction "Change"
class App extends React.Component {
            state = {
                name: 'Ray',
                age: 24
            }
            handleChange = (e) => {
                this.setState({
                    name: e.target.value
                });
            }
        
            render() {
                return (
                    <div className="app-content">
                        <h1>My name is: {this.state.name } and I am {this.state.age}</h1>
                        <form>
                            <input type="text" onChange={this.handleChange}/>
                            <button>Submit</button>
                        </form>
                    </div>
                )
            }
        }
Everytime user inputs something in text field, it will automatically chanage in the h1
<form onSubmit={}>
this is for when the user clicks and also uses the enter button to submit

handleSubmit = (e) => {
                e.preventDefault();
            }
this also prevents the page from reloading but rather submit
<form onSubmit={this.handleSubmit} to handle the submit function but also avoid a page refresh
The final function will look like this:

handleSubmit = (e) => {
    e.preventDefault();
    console.log('form submitted', this.state.name)
}

Final code after 9 tutorilas

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    <script crossorigin src="https://unpkg.com/react@16/umd/react.development.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
    <title>Document</title>
</head>
<body>
    
    <div id="app"></div>

    <script type="text/babel">
        class App extends React.Component {
            state = {
                name: 'Ray',
                age: 24
            }
            handleChange = (e) => {
                this.setState({
                    name: e.target.value
                });
            }
            handleSubmit = (e) => {
                e.preventDefault();
                console.log('form submitted', this.state.name)
            }
            render() {
                return (
                    <div className="app-content">
                        <h1>My name is: {this.state.name } and I am {this.state.age}</h1>
                        <form onSubmit={this.handleSubmit}>
                            <input type="text" onChange={this.handleChange}/>
                            <button>Submit</button>
                        </form>
                    </div>
                )
            }
        }
       
        ReactDOM.render(<App />, document.getElementById('app'));
    </script>
    
</body>
</html>





---10. Create React App -----------------------------------------------------------------------
= have node js on your computer

= then use npx create-react-app {...}

To create a new coponent

import React, { Component } from 'react';

class App extends Component {
  render() {
    return (
      <div className="App">
        <h1>My first React App</h1>
        <p>Welcome to it</p>
      </div>
    );
  } 
}

export default App;

Now to add a new component in the src file

import React, { Component } from 'react';

class Ninjas extends Component {
  render() {
    return (
      <div className="ninja">
        <div>Name: Raymond</div>
        <div>Age: 24</div>
        <div>Belt: Black</div>
      </div>
    );
  } 
}

export default Ninjas;

After this you need to import it into the App.js File
import React, { Component } from 'react';
import Ninjas from './Ninjas';

class App extends Component {
  render() {
    return (
      <div className="App">
        <h1>My first React App</h1>
        <p>Welcome to it</p>
        <Ninjas />
      </div>
    );
  } 
}

export default App;


-----13. Props ------------------------------------------------------------------------
This is used to pass data from parent component to child component

In the div
<div className="App">
        <h1>My first React App</h1>
        <p>Welcome to it</p>
        <Ninjas name="Ray" age="25" belt="black"/>
      </div>

App has properties of name and age etc that can be passed on to Ninjas in the render method

render() {
    console.log(this.props);
    return (
      <div className="ninja">
        <div>Name: Raymond</div>
        <div>Age: 24</div>
        <div>Belt: Black</div>
      </div>
    );
}

When you reload and check the console, you find name belt and age.

One way of viewing props from parent into child is by
<div className="ninja">
        <div>Name: {this.props.name} </div>
        <div>Age: {this.props.age}</div>
        <div>Belt: {this.props.belt}</div>
      </div> 
      ..in the Ninja.js

Another easier way of doing this is by

  const { name, age, belt } = this.props;
    return (
      <div className="ninja">
        <div>Name: {name} </div>
        <div>Age: {age}</div>
        <div>Belt: {belt}</div>
      </div>
    );
  }

then in the App.js file just add

<div className="App">
        <h1>My first React App</h1>
        <p>Welcome to it</p>
        <Ninjas name="Ray" age="25" belt="black"/>
        <Ninjas name="Ray" age="25" belt="black"/>
        <Ninjas name="Ray" age="25" belt="black"/>
      </div>
and it will automatically output the values below eachother



---14. Lists ----------------------------------------------------------------------------

state = {
    ninjas : [
      {name: 'Ryu', age: 24, belt:'black', id: 1},
      {name: 'Ryu', age: 24, belt:'black', id: 2},
      {name: 'Ryu', age: 24, belt:'black', id: 3},
      {name: 'Ryu', age: 24, belt:'black', id: 4}
    ]
  }
  render() {
    return (
      <div className="App">
        <h1>My first React App</h1>
        <p>Welcome to it</p>
        <Ninjas ninjas={this.state.ninjas}/>
      </div>
    );
  }

this is used to reference the array as a props

AND IN ninja.js

class Ninjas extends Component {
  render() {

    //We map method to map array to html element
    const { ninjas } = this.props;
    const ninjaList = ninjas.map(ninja => {
      return ( 
        <div className="ninja">
          <div>Name: {ninja.name}</div>
          <div>Age: {ninja.age}</div>
          <div>Belt: {ninja.belt}</div>
        </div>
      ) 
    })
    return (
      <div className="ninja-list">
        { ninjaList }
      </div>
    );
  } 
}

the Output of this will be
Name: Ryu
Age: 24
Belt: black
Name: Ray
Age: 24
Belt: red
Name: Reu
Age: 25
Belt: brown
Name: Roy
Age: 26
Belt: black

This output seems okay but the console gives errors
These errors are because react wants to know which ninja is which. 
In this case, there is no reference id for any of the ninjas
This can be solved by use of 

<div className="ninja" key={ninja.id}>
          <div>Name: {ninja.name}</div>
          <div>Age: {ninja.age}</div>
          <div>Belt: {ninja.belt}</div>
        </div>

The "key" class. Where you will refer to every ninja by id.



----15. Stateless Components--------------------------------------------------------------------
For stateless containers, we do not need the 

class Ninjas extends Component {

which is in the Ninjas.js file

You wont need

render() {

as well

Instead, you will have

import React, { Component } from 'react';

const Ninjas = (props) => {

    const { ninjas } = props;
    const ninjaList = ninjas.map(ninja => {
      return ( 
        <div className="ninja" key={ninja.id}>
          <div>Name: {ninja.name}</div>
          <div>Age: {ninja.age}</div>
          <div>Belt: {ninja.belt}</div>
        </div>
      ) 
    })
    return (
      <div className="ninja-list">
        { ninjaList }
      </div>
    )
}

export default Ninjas;

Because you no longer need the states.

Also cahnge the 


const Ninjas = ({ninjas}) => {
from props because you no longer need the props

then remove
const { ninjas } = props;

now you have

const Ninjas = ({ninjas}) => {
  
  const ninjaList = ninjas.map(ninja => {

instead :)

###This is all because you want to consider them as UI Components.!!


----16.  Conditional Output -------------------------------------------------------------------------
To output age above maybe 24

const ninjaList = ninjas.map(ninja => {
      if (ninja.age > 24){
      return ( 
        <div className="ninja" key={ninja.id}>
          <div>Name: {ninja.name}</div>
          <div>Age: {ninja.age}</div>
          <div>Belt: {ninja.belt}</div>
        </div>
      )
     } else {
        return null
     } 
    })

OR use the tanary javscript function
 
 const ninjaList = ninjas.map(ninja => {
      return ninja.age > 24 ? () : ()
    })
The () : () will return True on the left and false on the left.

const ninjaList = ninjas.map(ninja => {
      return ninja.age > 24 ? (
        <div className="ninja" key={ninja.id}>
          <div>Name: {ninja.name}</div>
          <div>Age: {ninja.age}</div>
          <div>Belt: {ninja.belt}</div>
        </div>
      ) : null;
    })
    return (
      <div className="ninja-list">
        { ninjaList }
      </div>
    )

Another option is to place it within the return statement:

return (
      <div className="ninja-list">
        { 
          ninjas.map(ninja => {
            return ninja.age > 24 ? (
              <div className="ninja" key={ninja.id}>
                <div>Name: {ninja.name}</div>
                <div>Age: {ninja.age}</div>
                <div>Belt: {ninja.belt}</div>
              </div>
            ) : null;
          })
        }
      </div>
    )
This can also sometimes be confusing, but the best is to  go with the 1st or 2nd



---17. Form Revisited ----------------------------------------------------------------------
Add a user 
On submit button, add the ninja to array
Add a Ninja by creating another file in src
call it AddNinja

start by typing

import React, { Component } from 'react'

then add a class

class AddNinja extends Component {}

in the class we will add a render

render(){
        return(
        <div>
            <form onSubmit={}>
                <label htmlFor="name">Name:</label>
                <input type="text" id="name" onChange={} />
                <label htmlFor="age">Age:</label>
                <input type="text" id="age" onChange={} />
                <label htmlFor="name">Belt:</label>
                <input type="text" id="belt" onChange={} />
                <button>Submit</button>
            </form>
        </div>
        )
    }

Notice the ids on every input field, this will help us create a state.

So next thing is to create a state

state = {
        name: null,
        age: null,
        belt: null
    }

Then we need to add functions so that they handle any
changes made in the input fields

Just below the state, add

handleChange = (e) => {
        this.setState({
            [e.target.id]: e.target.value
        })
    }

what this will do is to look for the target event and its state. The target event in this case is everytime the text iinputed in the field

<form onSubmit={}>
                <label htmlFor="name">Name:</label>
                <input type="text" id="name" onChange={this.handleChange} />
                <label htmlFor="age">Age:</label>
                <input type="text" id="age" onChange={this.handleChange} />
                <label htmlFor="name">Belt:</label>
                <input type="text" id="belt" onChange={this.handleChange} />
                <button>Submit</button>
</form>

Now lets add an event for the submit button also to avoid it refreshing the page once a submission has been ade

handleSubmit = (e) => {
        e.preventDefault();
        console.log(this.state);
    }

This is the function we will input into the button for submit

Now go to the root directory and import AddNinja

import AddNinja from './AddNinja';

then we add it to the Class App extending components

<AddNinja />

But this wont work because in our form we dont have the submit function for Submit button in the AddNinja

<form onSubmit={this.handleSubmit}>

But even after this, it wont work because we have not extended it

export default AddNinja

This is in the AddNinja.js

Yey! It works! So we see it in the console but it doent mean we have it in the screen. We will have to use a function that passes it from the AddNinja to the App.js



-----18. Functions as Props --------------------------------------------------------------------------
Now just below the state
state = {
    ninjas : [
      {name: 'Ryu', age: 24, belt:'black', id: 1},
      {name: 'Ray', age: 24, belt:'red', id: 2},
      {name: 'Reu', age: 25, belt:'brown', id: 3},
      {name: 'Roy', age: 26, belt:'black', id: 4},
      {name: 'Roy', age: 27, belt:'black', id: 4}
    ]
  }

Add an add ninja function below the above state
addNinja = (ninja) = > {
    
  }

Add a prop in the div at the AddNinja Component

<AddNinja addNinja={this.addNinja} />

This will now behave as a props

Now, in the AddNinja.js, add

handleSubmit = (e) => {
        e.preventDefault();
        this.props.addNinja(this.state);
    }

To call the function from the moment the submit button is clicked

Now in the App.js file, we will add abit more to the addNinja function

addNinja = (ninja) => {
    ninja.id = Math.random();
    //spread array takes components individually as elements in the original state. this will add the new ninja within the state.
    let ninjas = [...this.state.ninjas, ninja]
    this.setState({
      ninja: ninja
    });
  }

Spread array takes components individually as elements in the original state. this will add the new ninja within the state.
    let ninjas = [...this.state.ninjas, ninja]



-----19 Deleting Data ----------------------------------------------------------------------------------------
Add the function in app.js

  deleteNinja = (id) => {
    console.log(id);
  }
This will show in the console the id of the particular id of the item selcted.

In app.js add it as a prop

<Ninjas deleteNinja={this.deleteNinja} ninjas={this.state.ninjas}/>

Add a button with a function that fires on click
Use an anonymous fucntion

  <button onClick={() => {deleteNinja(ninja.id)}}>Delete</button>
        
It is the only way it will work

The full function will be

  deleteNinja = (id) => {
    //This is to filter through the array above of ninjas by creating variable
    let ninjas = this.state.ninjas.filter(ninja => {
      //return a value that is either true or false. But in this case only the one with the id
      return ninja.id !== id
    });
    //pass it in the new ninja array
    this.setState({
      ninjas: ninjas
    });
  }

This is what App.js looks like at the end

import React from 'react';

const Ninjas = ({ninjas, deleteNinja}) => {
  const ninjaList = ninjas.map(ninja => {
    if (ninja.age > 12){
      return (
        <div className="ninja" key={ninja.id}>
          <div>Name: {ninja.name}</div>
          <div>Age: {ninja.age}</div>
          <div>Belt: {ninja.belt}</div>
          <button onClick={() => {deleteNinja(ninja.id)}}>Delete</button>
        </div>
      )
    } else {
      return null
    }    
  })

  return(
    <div className="ninja-list">
      { ninjaList }
    </div>
  )
}

export default Ninjas


-------20. Recap on virtual DOMS -------------------------------------------------------------------------
Any changes made within data are compared to the old virtual dom and the difference is what is displayd in the browser


--------21 CSS File in react ------------------------------------------------------------------
Use it by importing a css folder in the Ninja.js

Import './Ninja.css'


--------22  Lifecycle of Compoents ------------------------------------------------------------
- constructor
- updating
- componentDidMount getting from db eg firebase

eg

The first time the browser fires app

componentDidMount(){
    console.log('Component mounted')
  }

Everytime ther is an update in the component

componentDidUpdate(prevProps, prevState){
    console.log('component updated');
    console.log(prevProps, prevState);    
  }


-------23, 24. To do App -----------------------------------------------------------
Consider the following

App.js would look like this

import React, { Component } from 'react';
import Todos from './Todos';
import AddTodo from './AddTodo'

class App extends Component {
  state = {
    todos: [
      {id:1, content: 'buy some milk'},
      {id:2, content: 'play some games'},
      {id:3, content: 'install router'}
    ]
  }
  addTodo = (todo) => {
    todo.id = Math.random();
    let todos = [...this.state.todos, todo];
    this.setState({
      todos
    })
  }
  deleteTodo = (id) => {
    const todos = this.state.todos.filter(todo => {
      return todo.id !== id
    });
    this.setState({
      todos
    });
  }
  render() {
    return (
      <div className="todo-app container">
        <h1 className="center blue-text">Todos</h1>
        <Todos todos={this.state.todos} deleteTodo={this.deleteTodo}/>
        <AddTodo addTodo={this.addTodo}/>
      </div>
    );
  }
}

export default App;

Todo.js would also look like this

import React from 'react';

const Todos = ({todos, deleteTodo}) => {
  
  const todoList = todos.length ? (
    todos.map(todo => {
      return (
        <div className="collection-item" key={todo.id}>
          <span onClick={() => {deleteTodo(todo.id)}}>{todo.content}</span>
        </div>
      )
    })
  ) : (
      <p className="center">You have no todos</p>
  )
  return (
    <div className="todos collection">
      {todoList}
    </div>
  )
}

export default Todos;

Then now its time for us to add a value by using AddTodo

import React, { Component } from 'react'

class AddTodo extends Component {
  
  state = {
     content: '' 
  }
  handleChange = (e) => {
    this.setState({
      content: e.target.value
    })
  }
  handleSubmit = (e) => {
    e.preventDefault();
    //console.log(this.state);
    this.props.addTodo(this.state);
    this.setState({
      content: ''
    })
  }  
  render(){
    return (
      <div>
          <form onSubmit={this.handleSubmit}>
            <label>Add new todo:</label>
            <input type="text" onChange={this.handleChange} value={this.state.content}/>
          </form>
      </div>
    )
  }
}

export default AddTodo



-----------25. React Router ---------------------------------

React router stops requests from going to the router. It serves these as components in the app.js

Add components folder in src
that is where you will add all
the about, contact etc components

all components will be js files

App.js would look like this

import React, { Component } from 'react';

class App extends Compnent {
  render(){
    return (
      <div className="App">
      
      </div>
    )
  }
}

export default App;

Now we need mockups for home, about, contact
Create folder called components

In Home.js
import React from 'react'

const Home = () => {
  return (
    <div className="container">
      h4.center>Home
      <p>lorem</p>
    </div>
  )
}
export default Home

Do the same for the about,contact as well
Create a component called Navbar.js

import React from 'react'

const Navbar = () => {
  return (
    <nav className="nav-wrapper red darken-3">
      div.container
        a.brand-logo>Poke
        ul
          li a href home>Home
          li a href about>About
          li a href contact>Contact
    </nav>
  )
}
export default Navbar

Import navbar into the App.js by

import Navbar from './components/Navbar'

and in the div
by typing in it
<Navbar />

Install react router by

npm install react-router-dom

After import the browser router in App.js

import { BrowserRouter, Route } from 'react-router-dom'
import Home from './component/Home'
import Contact from './component/Contact'
import About from './component/About'

and in the class App just below return function type

<BrowserRouter>
  <div>
    <Navbar />
    <Rout exact path='/' component={Home} />
    <Rout path='/about' component={About} />
    <Rout path='/contact' component={Contact} />
  </div>
</BrowserRouter>

But it is making request to the server. We just need react to take over.

We need to go to Navbar.js and add something that comes with the react dom package

import { Link, NavLink } from 'react-router-dom'

and in the ul, insteac of a tag, use a "Link to" or Link tank

Link to="/">Home<Link>
Link to="/about">About<Link>
Link to="/contact">Contact<Link>

prevents the default reloading requests
Making it smoother and quicker
When you use "NavLink" it creates an active links



---------27 Programmatic redirects -------------------------------------------------
We use "props" to add some extra information to the a route

for example:
props history. To redirect someone to another page after 2 seconds

eg in Contact.js
setTimeout(() => {
  props.history.push('/about')
}, 2000);

2seconds later, you are redirected to the about page

Higher order component
to deal with props through the router is by using the Navbar.js

import { Link, NavLink, withRouter } from 'react-router-dom'

in const, add
setTimeout(() => {
  props.history.push('/about')
}, 2000)

then export
export default withRouter(Navbar)

This super charges the Navbar component to give it properties power


------------29--------------------------------------------
Hpw to use axioms to pull data from a locatiom or rest api

In the Home.js,
state = {
  posts: [ ]
}
componentDidMount(){
  axios.get('api')
  .then(res => {
    console.log(res)
    this.setState({
      posts: res.data.slice(0-20)
    })
  })
}
render() {
  const { posts } = this.state;
  const postList = posts.length ? (
    posts.map(post => {
      return (
        <div className="post card" key={post.id}>
          <div className="card-content>
            <span className="card-title">{post.title}</span>
            <p>{post.body}</p>
          </div>
        </div>
      )
    })
  ) : (
    <div className="center">No posts yet</div>
  )
  return (
    <div className="container">
      <h4 className="center">Home</h4>
      {postList}
    </div>
  )
}


---------30. Route Params -------------------------------------------------


---------31 Route params 2 --------------------------------------------------


---------32 Switch Tag --------------------------------------------------


----------#34 Importing Immages -------------------------------------------------


-----------35  Redux stores --------------------------------------------------