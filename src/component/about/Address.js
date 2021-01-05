import React from 'react';
import './about.css';
class Address extends React.Component {
   constructor(){
      super();
       
   }

   componentDidMount(){
      console.log('===', this.props.location)
   }
   
   render() {
      const {location} = this.props
	  console.log('===',{location})
      return (
         <div>
            Address {location}
         </div>
      );
   }
}
export default Address;