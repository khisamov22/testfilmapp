package main

import (
	"database/sql"
	"fmt"
	"log"
	"net/http"
	"strings"

	_ "github.com/mattn/go-sqlite3"
)

func addfilm(x string, y string, y1 string, y2 string, cat []string) {
	var comedy, cartoons, fiction, horror, thrillers, militants, melodramas, adventure, anime, dramas string
	for _, x := range cat {
		switch x {
		case "1":
			comedy = "1"
		case "2":
			cartoons = "1"
		case "3":
			fiction = "1"
		case "4":
			horror = "1"
		case "5":
			thrillers = "1"
		case "6":
			militants = "1"
		case "7":
			melodramas = "1"
		case "8":
			adventure = "1"
		case "9":
			anime = "1"
		case "10":
			dramas = "1"
		}
	}

	db, err := sql.Open("sqlite3", "../database/database.sqlite")
	if err != nil {
		panic(err)
	}
	defer db.Close()

	result, err := db.Exec("insert into posts (title, description,imgsrc,date) values ($1, $2, $3, $4)", x, y, y1, y2)
	result1, err := db.Exec("insert into ganres (comedy,cartoons,fiction,horror,thrillers,militants,melodramas,adventure,anime,dramas) values ( $1,$2, $3, $4,$5,$6,$7,$8,$9,$10)", comedy, cartoons, fiction, horror, thrillers, militants, melodramas, adventure, anime, dramas)

	_ = result1

	if err != nil {
		panic(err)
	}
	id, _ := result.LastInsertId()
	fmt.Println("Фильм с id", id, "добавлен") // id последнего добавленного объекта
}

func main() {
	fmt.Println("Сервер запущен, можно отправлять пост запросы")
	http.HandleFunc("/", handler)
	log.Fatal(http.ListenAndServe("localhost:8001", nil))

}

func handler(w http.ResponseWriter, r *http.Request) {

	if r.Method == "POST" {
		r.ParseForm()

		params := r.Form

		if params.Get("pass") == "123123" {

			b := strings.Split(params.Get("category"), ",")

			addfilm(params.Get("title"), params.Get("description"), params.Get("urlsrc"), params.Get("date"), b)

		}

	}
}
