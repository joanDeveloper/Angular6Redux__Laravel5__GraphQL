import { NgModule } from "@angular/core";
import { HttpClientModule } from "@angular/common/http";

// Apollo
import { ApolloModule, Apollo } from "apollo-angular";
import { HttpLinkModule, HttpLink } from "apollo-angular-link-http";
import { InMemoryCache } from "apollo-cache-inmemory";


@NgModule({
  exports: [HttpClientModule, ApolloModule, HttpLinkModule]
})
export class GraphQLModule {
  constructor(apollo: Apollo, httpLink: HttpLink) {
    apollo.create({
      link: httpLink.create({
        withCredentials: false,
        uri: "http://127.0.0.1:8000/graphql/query/"
      }),
      cache: new InMemoryCache()
    });
  }
}
/*
http://127.0.0.1:8000/graphql/query/
http://127.0.0.1:8000/graphql/query?query=query{devices{data{id}}} */