import React, { useState, useEffect } from 'react';
import { Route, Switch, Redirect, Link, withRouter } from 'react-router-dom';
import Header from './Header';
import Pokemon from './Pokemon';
import Search from './Search';

function Home() {
    const [pokemons, setPokemon] = useState();
    const [terms, setTerms] = useState("");
    const getApiData = async () => {
        const response = await fetch("http://localhost:8741/pokedex/api").then((response) => response.json());
        setPokemon(response);
    }
    useEffect(() => {
        getApiData();
    }, []);

    const handleSearch = (e) => {
        let value = e.target.value;
        setTerms(value);
    }

    return (
        <div>
            <Header />
            <Search event={handleSearch} />
            <div className="pokedex-occitech-home">
                <div className="pokedex-occitech-list">
                    {pokemons &&
                        pokemons.filter((pokemon) => { return pokemon.firstType.includes(terms) }).map((pokemon) => (
                            <div key={pokemon.number}>
                                <ul >
                                    <li><img src={require("../../../public/build/img/sprites/" + pokemon.sprites + ".png")} />
                                        {pokemon.number} {pokemon.name}
                                    </li>
                                </ul>
                                <Pokemon
                                    image={pokemon.img}
                                    number={pokemon.number}
                                    name={pokemon.name}
                                    firstType={pokemon.firstType}
                                    secondType={pokemon.secondType}
                                    hp={pokemon.hp}
                                    attack={pokemon.attack}
                                    defense={pokemon.defense}
                                    spAttack={pokemon.spAttack}
                                    spDefense={pokemon.spDefense}
                                    speed={pokemon.speed}
                                />
                            </div>

                        ))

                    }

                </div>
            </div>
        </div>
    )
}

export default Home;