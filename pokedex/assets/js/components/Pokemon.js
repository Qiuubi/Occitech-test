import React from 'react';
import { useParams } from 'react-router-dom';

function Pokemon(props) {
    // const { name } = useParams();
    return (
        <div className="pokedex-occitech-pokemon">
            <div><img className="pokedex-occitech-pokemon-main-img" src={require("../../../public/build/img/main/" + props.image + ".png")} /></div>
            <ul>
                <li>Number : {props.number}</li>
                <li>Name : {name}</li>
                <li>Type 1 : {props.firstType}</li>
                <li>Type 2 : {props.secondType}</li>
                <li>Health points : {props.hp} HP</li>
                <li>Attack : {props.attack}</li>
                <li>Defense : {props.defense}</li>
                <li>Special Attack : {props.spAttack}</li>
                <li>Special Defense : {props.spDefense}</li>
                <li>Speed : {props.speed}</li>

            </ul>
        </div>
    );
}

export default Pokemon;
