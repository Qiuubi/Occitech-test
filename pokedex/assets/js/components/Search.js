import React from 'react';

function Search(props) {
    return (
        <div className="pokedex-occitech-searchbar">
            <input type="text" name="search" id="search" placeholder="Search by Type" onChange={props.event} />
        </div>
    )
}

export default Search;