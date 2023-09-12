
# BFS => Level wise blind search => FIFO
# BFS code implementation
# If the graph like this 

#          Arad
#          /  \
#         /    \
#      Erind   Bucarest
#                 \
#                  \
#                Timisoara

graph = {
  'Arad' : ['Erind','Bucarest'],
  'Erind' : ['Bucarest'],
  'Bucarest' : ['Timisoara'],
  'Timisoara' : [],
}

visited = [] # List to keep track of visited nodes.
queue = []     #Initialize a queue

def bfs(visited, graph, node):
  visited.append(node)
  queue.append(node)

  while queue:
    s = queue.pop(0) 
    print (s, end = "\n\n") 

    for neighbour in graph[s]:
      if neighbour not in visited:
        visited.append(neighbour)
        queue.append(neighbour)

print("Bredth First Traversal :")
bfs(visited, graph, 'Arad')
