async function createPagesTemplate({ graphql, actions, reporter }) {
  const { createPage } = actions
  
  const PageTemplate = path.resolve("./src/templates/page.js")
  const result = await graphql(`
    {
     
      allWpPage {
        edges {
          node {
            slug
            id
          }
        }
      }
    }
  `)
  
  const Pages = result.data.allWpPage.edges
    Pages.forEach(page => {
      createPage({
        path: `/${page.node.slug}`,
        component: PageTemplate,
        context: {
          id: page.node.id,
        },
      })
    })
  
 }